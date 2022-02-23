<template>
    <div class="container">
        <p>
            https://www.youtube.com/watch?v=4uVNz9sQn18&ab_channel=LaravelDaily
        </p>
        <p>
            http://www.itmathrepetitor.ru/laravel-5-5-i-vue-js-primer-proekta-crud/
        </p>
        <p>
            https://www.youtube.com/watch?v=6h-g0LqjWZM&ab_channel=LaravelDaily
        </p>
        <p>
            https://www.youtube.com/watch?v=UAxNcJprLA0&ab_channel=DKA-DEVELOP
        </p>
        <p>
            https://www.youtube.com/watch?v=KSHt4Ig4GLI&ab_channel=AreaWeb-%D0%B2%D0%B5%D0%B1-%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0%D0%B4%D0%BB%D1%8F%D0%B1%D0%BB%D0%BE%D0%BD%D0%B4%D0%B8%D0%BD%D0%BE%D0%BA
        </p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">customer Component</div>

                    <div class="card-body">
                        I'm an customer component.
                    </div>
                </div>
            </div>
        </div>
        <ul>
            <li v-for="customer in customers">
                {{ customer.firstname}}
                {{ customer.lastname}}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            customers:[]
        }
    },
    mounted() {
        this.loadCustomers();
        console.log('Component mounted.')
    },
    methods:{
        loadCustomers: function (){
            axios.get('/api/customers')
            .then((response) => {
                this.customers = response.data.data;
            })
            .catch(function (error){
                console.log(error)
            });
        }
    }
}
</script>
