# EXACT Sports

## About This Repository
This repository contains UI components and assets with our branding. It is only designed for use on EXACT Sports branded websites.

## Components
All the components can have class attributes which will be merged with the base component class.<br>
For some components there are different settings based on the brand.  The brand is added to the .env file:<br>
```
BRAND = exact
```
The current options are: 'exact' and 'spect8'.


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

The color choices are: blue, logo-orange, bright-orange and maroon.<br>
The icon choices are: ext (external link) and back (back arrow).<br>
Target and href are standard anchor variables.


```
<x-bcl::anchor color="blue" href="https://laravel.com" target="_blank" icon="ext">Laravel</x-bcl::anchor>
```

### Alerts

### Badges
Buttons have one optional variable that can be passed to the component: color.

The color choices are based on the brands and are: logo-orange, bright-orange, maroon, dark-gray, pale-brown and beige.

AlpineJS and Livewire models can also be used with the 'x-' and 'wire:' attributes.

```
<x-bcl::badge color="bright-orange">Badge</x-bcl::badge>
```


### Buttons
Buttons have one optional variable that can be passed to the component: icon.

The icon choices are: football, video, upload, share, label.

AlpineJS and Livewire models can also be used with the 'x-' and 'wire:' attributes.

```
<x-bcl::button.primary icon="football">Primary Button</x-bcl::button.primary>
<x-bcl::button.secondary>Secondary Button</x-bcl::button.secondary>
<x-bcl::button.cancel>Cancel Button</x-bcl::button.cancel>
```

### Icon Links
Icon links are standard anchor tags that are icons instead of text. One variable can be passed to the component: icon.

The icon choices are: football, edit, delete, share, label.

```
<x-bcl::icon-link href="#" icon="football"></x-bcl::icon-link>
```

### Logos

### Progress Steps

### Loading Spinners

### Inputs

### Tables
