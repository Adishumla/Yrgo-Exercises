import {PlayIcon} from '@sanity/icons'

export default {
  name: 'product',
  title: 'Product',
  type: 'document',
  icon: PlayIcon,
  fields: [
    {
      name: 'title',
      title: 'Product Title',
      type: 'string',
    },
    {
      name: 'slug',
      title: 'Slug',
      type: 'slug',
    },
    {
      name: 'image',
      title: 'Image',
      type: 'image',
    },
    {
      name: 'price',
      title: 'Price',
      type: 'number',
      validation: (Rule) => Rule.required().min(1).error('Products need a price!'),
    },
    {
      name: 'salePrice',
      title: 'Sale Price',
      type: 'number',
      validation: (Rule) =>
        Rule.max(Rule.valueOfField('price')).error('Sale price must be lower than price'),
    },
    {
      name: 'color',
      title: 'Color',
      type: 'reference',
      to: [{type: 'color'}],
    },
    {
      name: 'brand',
      title: 'Brand',
      type: 'reference',
      to: [{type: 'brand'}],
    },
    {
      name: 'categories',
      title: 'Categories',
      type: 'array',
      of: [{type: 'reference', to: [{type: 'category'}]}],
    },
  ],
  preview: {
    select: {
      title: 'title',
      media: 'image',
      price: 'price',
      salePrice: 'salePrice',
    },
    prepare(selection) {
      const {title, media, price, salePrice} = selection
      return {
        title,
        media,
        subtitle: salePrice ? `$${salePrice} (Sale)` : `$${price}`,
      }
    },
  },
}
