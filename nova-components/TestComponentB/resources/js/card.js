import Card from './components/Card'

import { surveyPlugin } from "survey-vue3-ui";
import { surveyCreatorPlugin } from "survey-creator-vue";

Nova.booting((app, store) => {
  app
      .use(surveyPlugin)
      .use(surveyCreatorPlugin)
      .component('test-component-b', Card)
})
