import {defineCliConfig} from 'sanity/cli'
import {theme} from 'https://themer.sanity.build/api/hues?preset=dew'

export default defineCliConfig({
  api: {
    projectId: 'gdb8l2o6',
    dataset: 'production',
  },
  theme,
})
