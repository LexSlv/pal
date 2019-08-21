new Vue({
    el: '#main',
    data: {
        tab: 1,
    },
});

new Vue({
    el: '#mobileMenu',
    data: {
        show: false,
    },
    methods: {

        getWorks() {
            let self = this;
            let data = {}
            //self.SrchBox = true;
            fetch('/send-data', {

                method: 'post',
                body: JSON.stringify(data)

              method: "GET",
              headers: {
                'Connection': 'keep-alive',
                'Accept-encoding': 'gzip, deflate',
                'Cache-Control': 'no-cache',
                'Accept': '*/*',
              }
            })
            .then(response => {
              response.json().then((json) => {
                self.projects = json; 
               // console.log(self.projects);
               // console.log(self.projects.length);
                return json;
              });  
            })
            .catch(function(err) {  
              console.log('Fetch Error: ', err);  
            });
            //self.title = 0;
          },




/*
        fetch('https://jsonplaceholder.typicode.com/posts/1')
        .then((response) => {
            if(response.ok) {
                return response.json();
            }
        
            throw new Error('Network response was not ok');
        })
        .then((json) => {
            this.posts.push({
                title: json.title,
                body: json.body
            });
        })
        .catch((error) => {
            console.log(error);
        });
*/

    }
});