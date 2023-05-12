export const deskStructure = (documentNode) => {
  const {_type} = documentNode
  switch (_type) {
    case 'brand':
      return 'Brand'
    case 'category':
      return 'Category'
    case 'colors':
      return 'Colors'
    case 'product':
      return 'Product'
    default:
      return undefined
  }
}
