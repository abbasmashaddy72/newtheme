@push('styles')
    <style>
        .ck-content>blockquote,
        .ck-content>dl,
        .ck-content>dd,
        .ck-content>h1,
        .ck-content>h2,
        .ck-content>h3,
        .ck-content>h4,
        .ck-content>h5,
        .ck-content>h6,
        .ck-content>hr,
        .ck-content>figure,
        .ck-content>p,
        .ck-content>pre {
            margin: revert;
        }

        .ck-content>ol,
        .ck-content>ul {
            list-style: revert;
            margin: revert;
            padding: revert;
        }

        .ck-content>table {
            border-collapse: revert;
        }

        .ck-content>h1,
        .ck-content>h2,
        .ck-content>h3,
        .ck-content>h4,
        .ck-content>h5,
        .ck-content>h6 {
            font-size: revert;
            font-weight: revert;
        }

        .ck-editor__editable_inline {
            min-height: 200px;
        }

    </style>
@endpush
@if ($floating)
    <div class="form-floating">
@endif

@if (!$floating)
    <x-form-label :label="$label" :for="$attributes->get('id') ?: $id()" />
@endif
<div wire:ignore>
    <textarea x-data="ckeditor()" x-init="init($dispatch)" wire:key="ckEditor" x-ref="ckEditor"></textarea>
</div>

@if ($floating)
    <x-form-label :label="$label" :for="$attributes->get('id') ?: $id()" />
@endif

@if ($floating)
    </div>
@endif

{!! $help ?? null !!}

@if ($hasErrorAndShow($name))
    <x-form-errors :name="$name" />
@endif

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <script>
        /**
         * An alpinejs app that handles CKEditor's lifecycle
         */
        function ckeditor() {
            return {
                /**
                 * The function creates the editor and returns its instance
                 * @param $dispatch Alpine's magic property
                 */
                create: async function($dispatch) {
                    // Create the editor with the x-ref
                    const editor = await ClassicEditor.create(this.$refs.ckEditor);
                    // Handle data updates
                    editor.model.document.on('change:data', function() {
                        $dispatch('input', editor.getData())
                    });
                    // return the editor
                    return editor;
                },
                /**
                 * Initilizes the editor and creates a listener to recreate it after a rerender
                 * @param $dispatch Alpine's magic property
                 */
                init: async function($dispatch) {
                    // Get an editor instance
                    const editor = await this.create($dispatch);
                    // Set the initial data
                    {{-- editor.setData('{{ old('description') }}') --}}
                    // Pass Alpine context to Livewire's
                    const $this = this;
                    // On reinit, destroy the old instance and create a new one
                    Livewire.on('reinit', async function(e) {
                        editor.setData('');
                        editor.destroy()
                            .catch(error => {
                                console.log(error);
                            });
                        await $this.create($dispatch);
                    });
                }
            }
        }
    </script>
@endpush
