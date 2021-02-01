Vue.use(VueApexCharts);
Vue.use(httpVueLoader);
Vue.component('apexchart', VueApexCharts);
const titleComponent = `<h1>{{ title }}</h1>`;

//var appTitle = new Vue({
//    el: '#app-title',
//    template: titleComponent,
//    data: function() { 
//        return {
//            title: 'Diagram Forwardkeys'
//        };
//    }
//});

//import Title from './components/Title'
//Vue.config.productionTip = false

new Vue({
    el: '#app-title',
    component: { 
        'app-title': httpVueLoader('components/apptitle.vue')
    }
});

var appL = new Vue({
    el: '#appl',
    template: `
<div>
{{ test }}
  <apexchart width="500" type="bar" :options="options" :series="series">
  </apexchart>
</div>
    `,
    data: function() {
        var datax = [];
        axios.get('http://127.0.0.1:8000/api/fk').then(response => {
            this.options.xaxis.categories = Object.keys(response.data[0]);
            this.series[0].data = Object.values(response.data[0]);
            this.series[1].data = Object
                .values(response.data[1])
                .map(function(num) {
                    return -num;
                });
            this.test = Object.keys(response.data[0]);
//            this.test = "Data is Ready!";
        });
        return {
            options: {
                chart: {
                    id: 'tour-destination',
                    type: 'bar',
                    height: 440,
                    stacked: true
                },
                colors: ['#008FFB', '#FF4560'],
                dataLabels: {
                    enabled: false
                },
                plotOptions: {
                    bar: {
                        horizontal: true,
                        barHeight: '80%',
                    },
                },
                tooltip: {
                    shared: false,
                    x: {
                    },
                    y: {
                        formatter: function (val) {
                            return Math.abs(val);
                        }
                    }
                },
                xaxis: {
                    categories: [ "Indonesia/ID", "Australia/AU", "South Korea/KR", "Japan/JP", "Netherlands/NL", "U.S.A./US", "China/CN", "United Kingdom/GB", "Singapore/SG", "Saudi Arabia/SA", "Russia/RU", "Germany/DE", "Malaysia/MY", "Taiwan/TW", "France/FR", "Others" ],
                    labels: {
                        formatter: function (val) {
                            return Math.abs(val);
                        }
                    }
                }
            },
            series: [{
                name: 'year-0',
                data: []
            },{
                name: 'year-1',
                data: []
            }],
            test: "Loading..." 
        }
    }
});

