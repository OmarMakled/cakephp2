<script>
import RetaileCard from '../components/RetaileCard.vue'
import Api from '../Api';

export default {
  components: { RetaileCard },
  data() {
    const retailes = [];
    return { retailes }
  },
  mounted(){
    this.getList();
  },
  methods: {
    getList(){
      Api.get('retailes')
        .then(data => {
          this.retailes = data
        })
        .catch(error => alert('error'));
    }
  }
}
</script>

<template>    
  <v-row>
    <v-col
      v-for="(retail, index) in retailes"
      :key="index"
      cols="12"
      md="3"
    >
      <RetaileCard
        :key="index"
        :retail="retail"
      />
    </v-col>
  </v-row>
</template>
