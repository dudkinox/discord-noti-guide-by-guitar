# discord-noti

ใช้งาน Discord webhook สำหรับส่งข้อความผ่าน PHP:

สร้าง webhook ใน Discord:

เปิด Discord แล้วคลิกที่ Server ที่ต้องการใช้ webhook
คลิกที่ชื่อ server เพื่อเปิดเมนู
เลือก Server Settings
เลือก Integrations
เลือก Webhooks
คลิกที่ "Create Webhook"
ตั้งชื่อ webhook และเลือก Channel ที่ต้องการให้ webhook ส่งข้อความ
คลิกที่ "Copy Webhook URL"

แล้วก็ใส่ code ตามนั้นแหละ

```
วิธีแนบ ข้อความ commit ใส่ใน github action = ${{ github.event.head_commit.message }}
วิธีแนบชื่อคน commit ${{ github.event.head_commit.author.name }}
```

เวลาเรียกให้ใช้
```
curl --location '{{url}}/notification.php' \
--header 'Content-Type: text/plain' \
--data '{
    "commit": "\n```${{ github.event.head_commit.message }}```"
}'
```

#node js

```
const axios = require('axios');
let data = JSON.stringify({
  "content": "[FRONTEND] Deploy Success!!! :guitar:"
});
let config = {
  method: 'post',
  maxBodyLength: Infinity,
  url: 'https://discord.com/api/webhooks/1095698869939097651/vTYO2C3CcKFNt9kUUM96mDVp3sPZAneRBAkYLEIqjM17YJp8AhtANj5O3QJsozzR_aQg',
  headers: {
    'Content-Type': 'application/json',
    'Cookie': '__cfruid=0c2b3fd98b753d68d08b5d510776bbbdecfebb8b-1683616619; __dcfduid=7cb24e7aee3911edbb4bbe49305c5a94; __sdcfduid=7cb24e7aee3911edbb4bbe49305c5a942582922a9f22eacbd469647c2105ecf4db8042864bc0506d602020917cbe7923'
  },
  data : data
};
axios.request(config)
.then((response) => {
  console.log(JSON.stringify(response.data));
})
.catch((error) => {
  console.log(error);
});
```
