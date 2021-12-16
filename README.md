# EXACT Sports

## About This Repository
This repository contains UI components and assets with our branding. It is only designed for use on EXACT Sports branded websites.

## Components

### Headings
HTML headings are defined with the ```<h1>``` to ```<h6>``` tags.

```
<x-bcl::headings.h1>Heading 1</x-bcl::headings.h1>
<x-bcl::headings.h2>Heading 2</x-bcl::headings.h2>
<x-bcl::headings.h3>Heading 3</x-bcl::headings.h3>
<x-bcl::headings.h4>Heading 4</x-bcl::headings.h4>
<x-bcl::headings.h5>Heading 5</x-bcl::headings.h5>
<x-bcl::headings.h6>Heading 6</x-bcl::headings.h6>
```

### Links
Anchor tags ```<a>``` have four variables that can be passed through to the component: href (default: #), color (default: blue), icon (default: null) and target (default: _blank).
The color choices are: blue, logo-orage, bright-orange and maroon.
The icon choices are ext (external link) and back (back arrow).
Target and href are standard anchor variables.

```
<x-bcl::anchor color="blue" href="https://laravel.com" target="_blank" icon="ext">Laravel</x-bcl::anchor>
```