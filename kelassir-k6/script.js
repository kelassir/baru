import http from 'k6/http';
import { check, sleep } from 'k6';

export let options = {
    stages: [
        { duration: '30s', target: __ENV.USERS || 1 }, // Naik ke jumlah pengguna
        { duration: '1m', target: __ENV.USERS || 1 },  // Kekal pada jumlah pengguna
        { duration: '30s', target: 0 },                // Turun semula
    ],
};

export default function () {
    let res = http.get('http://192.168.14.135:20250');
    check(res, {
        'status is 200': (r) => r.status === 200,
    });
    sleep(1);
}
