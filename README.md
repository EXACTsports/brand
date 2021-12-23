# EXACT Sports

## About This Repository
This repository contains UI components and assets with our branding. It is only designed for use on EXACT Sports branded websites.

## Installation


## Components
- [Headings](#headings) 
- [Links](#links) 
- [Alerts](#alerts) 
- [Badges](#badges) 
- [Buttons](#buttons) 
- [Icon Links](#icon-links) 
- [Logos](#logos) 
- [Progress Steps](#progress-steps) 
- [Loading Spinners](#loading-spinners) 
- [Inputs](#inputs) 
- [Tables](#tables) 

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
The loading spinner is used with a Livewire component and can be used on its own or as part of another element, e.g. a button.
The spinner also requires some custom CSS.

There are options for the spinner which are size (la-sm or la-2x or la-3x), icon (default is ball-spin-clockwise, the other is line-scale) and whether it is dark or light (light is default, the example below shows the dark alternative).

```
<div wire:loading.delay wire:target="input" class="absolute inset-y-0 right-0 flex items-center pt-3 pr-3 pointer-events-none">
    <x-loading size="la-sm" shade="la-dark"></x-loading>
</div>
```                                            


### Inputs
Inputs can be used horizontally or vertically.  The default is vertical (the label above the input), to change to the label being to the left of the input add the 'inline' attribute.

There are size different types of input: text, textarea, checkbox and select. There are also two input groups: checkbox and radio.

Vertical alignment requires a grid or flex on the containing ```<div>```, see the example below.  The vertical alignment has no class requirements on the containing div.

Each input is contained within either the group component or, for checbox and radio groups, the option-group component.

Each type of input has its own attributes:

#### Group
Attributes: label, for, error (default is false), helpText (default is false) and inline (default is false).

#### Option Group
Attributes: inline and label.

#### Text
Attributes: id, name, placeholder and type (default is text).

#### Textarea
Attributes: id, name, placeholder and rows (default is 3).

#### Select
Attributes: id, name and placeholder.

#### Checkbox
Attributes: id, name, value.

#### Option
Attributes: id, name, label, value and type (radio or checkbox).

```
<div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
    <!-- Input: text -->
    <x-input.group for="testText" label="input.text" error="Sample error text" helpText="Sample help text">
        <x-input.text id="testText" name="testText" aria-placeholder="test" placeholder="testText" />
    </x-input.group>
    <!-- Textarea -->
    <x-input.group for="testTextarea" label="input.textarea" error="Sample error text" helpText="Sample help text">
        <x-input.textarea id="testTextarea" name="testTextarea" aria-placeholder="test" placeholder="testTextarea" rows="5"></x-input.textarea>
    </x-input.group>
    <!-- Input: Checkbox -->
    <x-input.group for="testCheckbox" label="input.checkbox" error="Sample error text" helpText="Sample help text">
        <x-input.checkbox id="testCheckbox" name="testCheckbox" value="1" />
    </x-input.group>
    <!-- Select/Dropdown -->
    <x-input.group for="testSelect" label="input.select" error="Sample error text" helpText="Sample help text">
        <x-input.select id="testSelect" name="testSelect">
            <option value="" disabled>Select Column...</option>
            <option value="1">Option 1</option>
            <option value="2">Option 1</option>
        </x-input.select>
    </x-input.group>

    <!-- Input: Radio Group-->
    <x-input.option-group label="input.option-group: Radio">
        <x-input.option type="radio" id="radio-group" name="radio-group" value="1" label="radio 1"></x-input.option>
        <x-input.option type="radio" id="radio-group" name="radio-group" value="2" label="radio 2"></x-input.option>
    </x-input.option-group>

    <!-- Input: Checkbox Group-->
    <x-input.option-group label="input.option-group: Checkbox">
        <x-input.option type="checkbox" id="check-group" name="check-group" value="1" label="check 1"></x-input.option>
        <x-input.option type="checkbox" id="check-group" name="check-group" value="2" label="check 2"></x-input.option>
    </x-input.option-group>
</div>
```

### Tables
The tables are split into the base table and then three parts: head, body and foot.