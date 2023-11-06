<template>
  <v-card>
    <v-card-text>
      <div class="font-weight-bold ms-1 mb-2">
        Retail: {{ retail.name }}
      </div>

      <v-timeline density="compact" align="start">
        <v-timeline-item
          v-for="(day, index) in retail.items"
          :key="index"
          size="x-small"
        >
          <div class="mb-4">
            <div class="font-weight-normal" v-if="day?.dayoff">
              <v-icon>mdi-door-sliding</v-icon> Dayoff
            </div>
            <div v-else>
              <v-icon aria-hidden="false">
                mdi-clock-alert-outline
              </v-icon>
              <strong>{{day.title}} </strong> {{ day.from }} to {{ day.to }}
            </div>
          </div>
        </v-timeline-item>
      </v-timeline>
    </v-card-text>
  </v-card>
</template>
  <script>
    export default {
        props: {
        retail: {
            type: Object,
            required: true
        }
    }
}
  </script>