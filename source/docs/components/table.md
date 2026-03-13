---
title: Table
description: Table component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/table.png
metaTitle: Table Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Table

The Table component provides a styled container for displaying tabular data with support for headers, footers, captions, and responsive scrolling.

## Installation

Add the table component to your project:

<x-code-tabs
    npm="npx velyx@latest add table"
    pnpm="pnpm dlx velyx@latest add table"
    yarn="yarn dlx velyx@latest add table"
    bun="bunx --bun velyx@latest add table"
/>

## Usage

### Basic Table

<x-component-preview component="table">
    <x-ui.table>
        <x-ui.table.header>
            <x-ui.table.row>
                <x-ui.table.head>Invoice</x-ui.table.head>
                <x-ui.table.head>Status</x-ui.table.head>
                <x-ui.table.head>Method</x-ui.table.head>
                <x-ui.table.head class="text-right">Amount</x-ui.table.head>
            </x-ui.table.row>
        </x-ui.table.header>

        <x-ui.table.body>
            <x-ui.table.row>
                <x-ui.table.cell class="font-medium">INV001</x-ui.table.cell>
                <x-ui.table.cell>Paid</x-ui.table.cell>
                <x-ui.table.cell>Credit Card</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$250.00</x-ui.table.cell>
            </x-ui.table.row>

            <x-ui.table.row>
                <x-ui.table.cell class="font-medium">INV002</x-ui.table.cell>
                <x-ui.table.cell>Pending</x-ui.table.cell>
                <x-ui.table.cell>PayPal</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$150.00</x-ui.table.cell>
            </x-ui.table.row>
        </x-ui.table.body>
    </x-ui.table>
</x-component-preview>

### With Caption

<x-component-preview component="table">
    <x-ui.table>
        <x-ui.table.caption>
            A list of your recent invoices.
        </x-ui.table.caption>

        <x-ui.table.header>
            <x-ui.table.row>
                <x-ui.table.head>Invoice</x-ui.table.head>
                <x-ui.table.head>Status</x-ui.table.head>
                <x-ui.table.head class="text-right">Amount</x-ui.table.head>
            </x-ui.table.row>
        </x-ui.table.header>

        <x-ui.table.body>
            <x-ui.table.row>
                <x-ui.table.cell class="font-medium">INV001</x-ui.table.cell>
                <x-ui.table.cell>Paid</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$250.00</x-ui.table.cell>
            </x-ui.table.row>

            <x-ui.table.row>
                <x-ui.table.cell class="font-medium">INV002</x-ui.table.cell>
                <x-ui.table.cell>Pending</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$150.00</x-ui.table.cell>
            </x-ui.table.row>
        </x-ui.table.body>
    </x-ui.table>
</x-component-preview>

### With Footer

<x-component-preview component="table">
    <x-ui.table>
        <x-ui.table.header>
            <x-ui.table.row>
                <x-ui.table.head class="w-[100px]">Invoice</x-ui.table.head>
                <x-ui.table.head>Status</x-ui.table.head>
                <x-ui.table.head>Method</x-ui.table.head>
                <x-ui.table.head class="text-right">Amount</x-ui.table.head>
            </x-ui.table.row>
        </x-ui.table.header>

        <x-ui.table.body>
            <x-ui.table.row>
                <x-ui.table.cell class="font-medium">INV001</x-ui.table.cell>
                <x-ui.table.cell>Paid</x-ui.table.cell>
                <x-ui.table.cell>Credit Card</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$250.00</x-ui.table.cell>
            </x-ui.table.row>

            <x-ui.table.row>
                <x-ui.table.cell class="font-medium">INV002</x-ui.table.cell>
                <x-ui.table.cell>Pending</x-ui.table.cell>
                <x-ui.table.cell>PayPal</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$150.00</x-ui.table.cell>
            </x-ui.table.row>
        </x-ui.table.body>

        <x-ui.table.footer>
            <x-ui.table.row>
                <x-ui.table.cell colspan="3">Total</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$400.00</x-ui.table.cell>
            </x-ui.table.row>
        </x-ui.table.footer>
    </x-ui.table>
</x-component-preview>

### Full Table with All Sections

<x-component-preview component="table">
    <x-ui.table>
        <x-ui.table.caption>
            A list of your recent invoices.
        </x-ui.table.caption>

        <x-ui.table.header>
            <x-ui.table.row>
                <x-ui.table.head class="w-[100px]">Invoice</x-ui.table.head>
                <x-ui.table.head>Status</x-ui.table.head>
                <x-ui.table.head>Method</x-ui.table.head>
                <x-ui.table.head class="text-right">Amount</x-ui.table.head>
            </x-ui.table.row>
        </x-ui.table.header>

        <x-ui.table.body>
            <x-ui.table.row>
                <x-ui.table.cell class="font-medium">INV001</x-ui.table.cell>
                <x-ui.table.cell>Paid</x-ui.table.cell>
                <x-ui.table.cell>Credit Card</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$250.00</x-ui.table.cell>
            </x-ui.table.row>

            <x-ui.table.row>
                <x-ui.table.cell class="font-medium">INV002</x-ui.table.cell>
                <x-ui.table.cell>Pending</x-ui.table.cell>
                <x-ui.table.cell>PayPal</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$150.00</x-ui.table.cell>
            </x-ui.table.row>

            <x-ui.table.row>
                <x-ui.table.cell class="font-medium">INV003</x-ui.table.cell>
                <x-ui.table.cell>Unpaid</x-ui.table.cell>
                <x-ui.table.cell>Bank Transfer</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$350.00</x-ui.table.cell>
            </x-ui.table.row>

            <x-ui.table.row>
                <x-ui.table.cell class="font-medium">INV004</x-ui.table.cell>
                <x-ui.table.cell>Paid</x-ui.table.cell>
                <x-ui.table.cell>Credit Card</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$450.00</x-ui.table.cell>
            </x-ui.table.row>
        </x-ui.table.body>

        <x-ui.table.footer>
            <x-ui.table.row>
                <x-ui.table.cell colspan="3">Total</x-ui.table.cell>
                <x-ui.table.cell class="text-right">$1,200.00</x-ui.table.cell>
            </x-ui.table.row>
        </x-ui.table.footer>
    </x-ui.table>
</x-component-preview>

## Components

The Table component consists of several sub-components:

| Component | Purpose |
|-----------|---------|
| `<x-ui.table>` | Main table container with responsive scrolling |
| `<x-ui.table.header>` | Table header section (`<thead>`) |
| `<x-ui.table.body>` | Table body section (`<tbody>`) |
| `<x-ui.table.footer>` | Table footer section (`<tfoot>`) |
| `<x-ui.table.row>` | Table row (`<tr>`) |
| `<x-ui.table.head>` | Table header cell (`<th>`) |
| `<x-ui.table.cell>` | Table data cell (`<td>`) |
| `<x-ui.table.caption>` | Table caption (`<caption>`) |

## Examples

### Basic Table Structure

```php
<x-ui.table>
    <x-ui.table.header>
        <x-ui.table.row>
            <x-ui.table.head>Name</x-ui.table.head>
            <x-ui.table.head>Email</x-ui.table.head>
            <x-ui.table.head>Role</x-ui.table.head>
        </x-ui.table.row>
    </x-ui.table.header>

    <x-ui.table.body>
        <x-ui.table.row>
            <x-ui.table.cell>John Doe</x-ui.table.cell>
            <x-ui.table.cell>john@example.com</x-ui.table.cell>
            <x-ui.table.cell>Admin</x-ui.table.cell>
        </x-ui.table.row>
    </x-ui.table.body>
</x-ui.table>
```

### Table with Laravel Collection

```php
<x-ui.table>
    <x-ui.table.header>
        <x-ui.table.row>
            <x-ui.table.head>Name</x-ui.table.head>
            <x-ui.table.head>Email</x-ui.table.head>
        </x-ui.table.row>
    </x-ui.table.header>

    <x-ui.table.body>
        @foreach($users as $user)
            <x-ui.table.row>
                <x-ui.table.cell>{{ $user->name }}</x-ui.table.cell>
                <x-ui.table.cell>{{ $user->email }}</x-ui.table.cell>
            </x-ui.table.row>
        @endforeach
    </x-ui.table.body>
</x-ui.table>
```

### With Column Alignment

```php
<x-ui.table>
    <x-ui.table.header>
        <x-ui.table.row>
            <x-ui.table.head>Product</x-ui.table.head>
            <x-ui.table.head class="text-center">Quantity</x-ui.table.head>
            <x-ui.table.head class="text-right">Price</x-ui.table.head>
        </x-ui.table.row>
    </x-ui.table.header>

    <x-ui.table.body>
        <x-ui.table.row>
            <x-ui.table.cell>Widget</x-ui.table.cell>
            <x-ui.table.cell class="text-center">5</x-ui.table.cell>
            <x-ui.table.cell class="text-right">$99.99</x-ui.table.cell>
        </x-ui.table.row>
    </x-ui.table.body>
</x-ui.table>
```

### With Row Styling

```php
<x-ui.table>
    <x-ui.table.header>
        <x-ui.table.row>
            <x-ui.table.head>Task</x-ui.table.head>
            <x-ui.table.head>Status</x-ui.table.head>
        </x-ui.table.row>
    </x-ui.table.header>

    <x-ui.table.body>
        <x-ui.table.row class="bg-muted/50">
            <x-ui.table.cell>Important task</x-ui.table.cell>
            <x-ui.table.cell>Urgent</x-ui.table.cell>
        </x-ui.table.row>

        <x-ui.table.row>
            <x-ui.table.cell>Normal task</x-ui.table.cell>
            <x-ui.table.cell>Active</x-ui.table.cell>
        </x-ui.table.row>
    </x-ui.table.body>
</x-ui.table>
```

### With Conditional Styling

```php
<x-ui.table>
    <x-ui.table.header>
        <x-ui.table.row>
            <x-ui.table.head>Invoice</x-ui.table.head>
            <x-ui.table.head>Status</x-ui.table.head>
        </x-ui.table.row>
    </x-ui.table.header>

    <x-ui.table.body>
        @foreach($invoices as $invoice)
            <x-ui.table.row class="{{ $invoice->status === 'Overdue' ? 'bg-destructive/10' : '' }}">
                <x-ui.table.cell>{{ $invoice->number }}</x-ui.table.cell>
                <x-ui.table.cell>
                    <span class="inline-flex items-center rounded-full px-2 py-1 text-xs
                        {{ $invoice->status === 'Paid' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ $invoice->status }}
                    </span>
                </x-ui.table.cell>
            </x-ui.table.row>
        @endforeach
    </x-ui.table.body>
</x-ui.table>
```

## Customization

### Custom Column Width

```php
<x-ui.table>
    <x-ui.table.header>
        <x-ui.table.row>
            <x-ui.table.head class="w-[100px]">ID</x-ui.table.head>
            <x-ui.table.head class="w-[200px]">Name</x-ui.table.head>
            <x-ui.table.head>Description</x-ui.table.head>
        </x-ui.table.row>
    </x-ui.table.header>

    <x-ui.table.body>
        <!-- rows -->
    </x-ui.table.body>
</x-ui.table>
```

### Custom Caption Styling

```php
<x-ui.table>
    <x-ui.table.caption class="text-sm font-medium text-muted-foreground">
        Showing 1 to 10 of 50 results
    </x-ui.table.caption>

    <!-- rest of table -->
</x-ui.table>
```

## Accessibility

Table components include semantic HTML and ARIA attributes:

- Proper table structure with `<thead>`, `<tbody>`, `<tfoot>`
- Caption for screen readers describing table content
- Header cells (`<th>`) properly associated with data cells
- Scope attributes automatically added to header cells
- Responsive scrolling for mobile devices

## Notes

- The table component automatically wraps content in a scrollable container on mobile
- Use `text-left`, `text-center`, or `text-right` utility classes for column alignment
- The `colspan` attribute can be used on cells to span multiple columns
- Row heights automatically adjust to content

## Next Steps

- Explore [Card component](/docs/components/card)
- Learn about [Badge component](/docs/components/badge)
- View [Breadcrumbs component](/docs/components/breadcrumbs)
