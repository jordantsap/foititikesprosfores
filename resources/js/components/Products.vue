<template>
<div>
    <div class="col-sm-4 text-center" v-for="product in products" :key="product.id">
    <a href="{{ url('product', product.id) }}">
      <!-- <img
        class="img-responsive img-fluid rounded"
        style="width: 100%; height: 150px"
        src="{{ asset(product.image) }}"
        alt="{{ product.title }}"
      /> -->
      <h2>{{ product.title }}</h2>
    </a>
    <h3>
      <b>{{ __("Κατηγορία") }}</b> <br />
      <!-- <div :key="{{ product.category.id }}">
          {{  product.category.title }}
      </div> -->
    </h3>
    <h4>
      <b>{{ __("Εταιρεία") }}</b>
      <!-- <a href="{{ product.company ? url('company', product.company.id) : 'none' }}"> -->
          <br />
        {{ product.company ? product.company.title : 'No Company' }}</a
      >
    </h4>
    <h4 class="col-xs-4">
      <b>{{ __("Τιμή") }}</b
      ><br />
      € {{ product.price }}
    </h4>

    <br />
  </div>
</div>
</template>

<script>
export default {
  data () {
    return {
      categories: [],
      products: [],
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
