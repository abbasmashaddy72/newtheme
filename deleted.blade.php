<section>
    <div class="max-w-6xl px-4 mx-auto sm:px-6">

        <!-- CTA box -->
        <div class="relative bg-gray-800 dark">

            <!-- Background illustration -->
            <div class="absolute inset-0 left-auto pointer-events-none" aria-hidden="true">
                <svg class="h-full" width="400" height="232" viewBox="0 0 400 232"
                    xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="39.386%" id="box-gr-a">
                            <stop stop-color="#667EEA" offset="0%" />
                            <stop stop-color="#667EEA" stop-opacity="0" offset="100%" />
                        </radialGradient>
                        <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="39.386%" id="box-gr-b">
                            <stop stop-color="#3ABAB4" offset="0%" />
                            <stop stop-color="#3ABAB4" stop-opacity="0" offset="100%" />
                        </radialGradient>
                    </defs>
                    <g transform="translate(-85 -369)" fill="none" fill-rule="evenodd">
                        <circle fill-opacity=".16" fill="url(#box-gr-a)" cx="413" cy="688" r="240" />
                        <circle fill-opacity=".24" fill="url(#box-gr-b)" cx="400" cy="400" r="400" />
                    </g>
                </svg>
            </div>

            @livewire('frontend.newsletter')

        </div>

    </div>
</section>
