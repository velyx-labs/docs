<div id="docsearch" class="docsearch"></div>

@push('scripts')
    @if ($page->docsearchApiKey && $page->docsearchIndexName)
        <script type="module">
            docsearch({
                container: '#docsearch',
                appId: '{{ $page->docsearchAppId }}',
                indexName: '{{ $page->docsearchIndexName }}',
                apiKey: '{{ $page->docsearchApiKey }}',
                placeholder: 'Search docs…',
                translations: {
                    button: {
                        buttonText: 'Search',
                        buttonAriaLabel: 'Search documentation',
                    },
                    modal: {
                        searchBox: {
                            resetButtonTitle: 'Clear the query',
                            cancelButtonText: 'Close',
                            cancelButtonAriaLabel: 'Close search',
                        },
                    },
                },
            });
        </script>
    @endif
@endpush
