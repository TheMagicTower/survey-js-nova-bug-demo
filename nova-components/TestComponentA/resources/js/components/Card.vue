<template>
  <Card class="flex flex-col items-center justify-center">
    <div class="px-3 py-3">
      <h1 class="text-center text-3xl text-gray-500 font-light">TestComponentA</h1>
      <div class="h-full w-full">
        <SurveyCreatorComponent :model="creator" />
      </div>
    </div>
  </Card>
</template>

<script setup>
import 'survey-core/defaultV2.min.css';
import "survey-creator-core/survey-creator-core.min.css";

const props = defineProps({
  card: Object,
})

const creatorOptions = {
  showLogicTab: true,
  isAutoSave: true
};

import { SurveyCreatorModel } from "survey-creator-core";
const creator = new SurveyCreatorModel(creatorOptions);
</script>
