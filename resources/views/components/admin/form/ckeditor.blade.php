@push('styles')
    @include('components.admin.form.ckeditor_style')
@endpush

<div wire:ignore class="mt-4 form-group row">
    <label class="block">
        <x-form-label :label="$label" />
        <div class="mt-2 col-md-9">
            <textarea id="{{ $id }}" wire:model="{{ $name }}"></textarea>
        </div>
    </label>
</div>

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    @if (Route::getCurrentRoute()->getActionMethod() == 'show')
        <script defer>
            var ready = (callback) => {
                if (document.readyState != "loading") callback();
                else document.addEventListener("DOMContentLoaded", callback);
            }
            ready(() => {
                ClassicEditor
                    .create(document.querySelector('#{{ $id }}'))
                    .then(editor => {
                        editor.model.document.on('change:data', () => {
                            @this.set('{{ $name }}', editor.getData())
                        })
                        Livewire.on('reinit', () => {
                            editor.setData('', '')
                        })
                        Livewire.on('load{{ $lang }}', (content) => {
                            editor.setData(content)
                        })
                        editor.isReadOnly = true;
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        </script>
    @else
        <script defer>
            class MyUploadAdapter {
                // ...
                constructor(loader) {
                    // The file loader instance to use during the upload.
                    this.loader = loader;
                }

                // Starts the upload process.
                upload() {
                    return this.loader.file
                        .then(file => new Promise((resolve, reject) => {
                            this._initRequest();
                            this._initListeners(resolve, reject, file);
                            this._sendRequest(file);
                        }));
                }

                // Aborts the upload process.
                abort() {
                    if (this.xhr) {
                        this.xhr.abort();
                    }
                }

                _initRequest() {
                    const xhr = this.xhr = new XMLHttpRequest();

                    // Note that your request may look different. It is up to you and your editor
                    // integration to choose the right communication channel. This example uses
                    // a POST request with JSON as a data structure but your configuration
                    // could be different.
                    xhr.open('POST', '{{ route('ckeditor.upload') }}', true);
                    xhr.setRequestHeader('x-csrf-token', '{{ csrf_token() }}');
                    xhr.responseType = 'json';
                }

                _initListeners(resolve, reject, file) {
                    const xhr = this.xhr;
                    const loader = this.loader;
                    const genericErrorText = `Couldn't upload file: ${ file.name }.`;

                    xhr.addEventListener('error', () => reject(genericErrorText));
                    xhr.addEventListener('abort', () => reject());
                    xhr.addEventListener('load', () => {
                        const response = xhr.response;

                        // This example assumes the XHR server's "response" object will come with
                        // an "error" which has its own "message" that can be passed to reject()
                        // in the upload promise.
                        //
                        // Your integration may handle upload errors in a different way so make sure
                        // it is done properly. The reject() function must be called when the upload fails.
                        if (!response || response.error) {
                            return reject(response && response.error ? response.error.message : genericErrorText);
                        }

                        // If the upload is successful, resolve the upload promise with an object containing
                        // at least the "default" URL, pointing to the image on the server.
                        // This URL will be used to display the image in the content. Learn more in the
                        // UploadAdapter#upload documentation.
                        resolve({
                            default: response.url
                        });
                    });

                    // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
                    // properties which are used e.g. to display the upload progress bar in the editor
                    // user interface.
                    if (xhr.upload) {
                        xhr.upload.addEventListener('progress', evt => {
                            if (evt.lengthComputable) {
                                loader.uploadTotal = evt.total;
                                loader.uploaded = evt.loaded;
                            }
                        });
                    }
                }

                _sendRequest(file) {
                    // Prepare the form data.
                    const data = new FormData();

                    data.append('upload', file);

                    // Important note: This is the right place to implement security mechanisms
                    // like authentication and CSRF protection. For instance, you can use
                    // XMLHttpRequest.setRequestHeader() to set the request headers containing
                    // the CSRF token generated earlier by your application.

                    // Send the request.
                    this.xhr.send(data);
                }

                // ...
            }

            function MyCustomUploadAdapterPlugin(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                    // Configure the URL to the upload script in your back-end here!
                    return new MyUploadAdapter(loader);
                };
            }

            var ready = (callback) => {
                if (document.readyState != "loading") callback();
                else document.addEventListener("DOMContentLoaded", callback);
            }
            ready(() => {
                ClassicEditor
                    .create(document.querySelector('#{{ $id }}'), {
                        extraPlugins: [MyCustomUploadAdapterPlugin],

                        // ...
                    })
                    .then(editor => {
                        editor.filebrowserUploadUrl =
                            "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}";
                        editor.filebrowserUploadMethod = 'form'
                        editor.model.document.on('change:data', () => {
                            @this.set('{{ $name }}', editor.getData())
                        })
                        Livewire.on('reinit', () => {
                            editor.setData('', '')
                        })
                        Livewire.on('load{{ $lang }}', (content) => {
                            editor.setData(content)
                        })
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        </script>
    @endif
@endpush
