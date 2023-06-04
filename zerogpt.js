const axios = require('axios');

const options = {
  method: 'POST',
  url: 'https://zerogpt.p.rapidapi.com/api/v1/detectText',
  headers: {
    'content-type': 'application/json',
    'X-RapidAPI-Key': 'your-api-key-here',
    'X-RapidAPI-Host': 'zerogpt.p.rapidapi.com'
  },
  data: {
    input_text: 'C++ is a high-level, general-purpose programming language...'
  }
};

try {
  const response = await axios.request(options);
  console.log(response.data);
} catch (error) {
  console.error(error);
}