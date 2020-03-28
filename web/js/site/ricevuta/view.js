

/* global Vue */

$(document).ready(function () {


    Vue.component('todo', {
        props: ['task'],
        template: '<h4> This a component with task: {{task}}</h4>'
    });


    var app = new Vue({
        el: '#app',
        data: {
            tasks: [
                {id: 1, text: 'Clean the room'}, 
                {id: 2, text: 'Cook dinner'}
            ]
        },
        created: function () {
            // `this` points to the vm instance
            console.log('on created the message is: ' + this.message);
        }
    });


});



