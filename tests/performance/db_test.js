import http from 'k6/http';
import { sleep } from 'k6';

export let options = {
    // How many times will the test run
    iterations: 1000,
    // Concurrencylevel (concurrent users)
    vus: 50, // 50 concurrent users
};

export default function () {
    // Endpoint for framework mock data
    let response = http.get('http://yii2.local'); //framework-data
    if (response.status !== 200) {
        console.error(`Error: Status code ${response.status}`);
    }
    sleep(1);

    // Endpoint for the homepage
    //http.get('http://codeigniter4.local/');
    sleep(1);

    // Endpoint for retrieving users
    //http.get('http://codeigniter4.local/users');
    sleep(1);

    // Endpoint for retrieving posts
    //http.get('http://codeigniter4.local/posts');
    sleep(1);

    // Endpoint for retrieving comments
    //http.get('http://codeigniter4.local/comments');
    sleep(1);
}
