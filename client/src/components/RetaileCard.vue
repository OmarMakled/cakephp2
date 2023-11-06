<template>
  <v-card>
    <v-card-text>
      <div class="font-weight-bold ms-1 mb-2">
        Retail: {{ item.Retailer.name }}
      </div>

      <v-timeline density="compact" align="start">
        <v-timeline-item
          v-for="(row, index) in item.WorkingHour"
          :key="index"
          size="x-small"
        >
          <div class="mb-4">
            <div class="font-weight-normal" v-if="row.is_dayoff === '1'">
              <strong>{{row.day}} </strong> <v-icon class="mr-1">mdi-door-sliding</v-icon> Dayoff
            </div>
            <div class="font-weight-normal" v-else>
              <v-icon class="mr-1">
                mdi-clock-alert-outline
              </v-icon>
              <strong>{{row.day}} </strong> {{ row.from }} <v-icon>mdi-chevron-right</v-icon>  {{ row.to }}
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
        item: {
            type: Object,
            required: true
        }
    }
}
  </script>