<template>
    <div>
        <label :key="field.id" v-for="field in fields">{{field.name}}: </label>
    <input type="text" :value="field.value" class="form-control" :name="field.value.value" placeholder="{{ field.value.value }}">
    </div>
</template>


<script>
export default {
  data: function () {
    return {
      fields: [],
    //   loading: true,
    };
  },

  created() {
    this.loadCategories();
    this.loadProducts();
  },

  methods: {
    loadCategories: function () {
      axios
        .get("categories")
        .then((response) => {
          this.categories = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },

    loadProducts: function () {
      axios
        .get("products")
        .then((response) => {
          this.products = response.data;
          //   this.loading = false;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>
