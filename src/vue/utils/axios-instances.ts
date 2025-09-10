import axios from 'axios';
const originUrl = window.location.origin + '/wp-json';

export const axiosInstance = axios.create({
  baseURL: originUrl,
  headers: {
    'Content-type': 'application/json'
  }
});
