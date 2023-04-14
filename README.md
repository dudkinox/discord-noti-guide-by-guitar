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


วิธีแนบ ข้อความ commit ใส่ใน github action = ${{ github.event.head_commit.message }}
เวลาเรียกให้ใช้
```
curl --location '{{url}}/notification.php' \
--header 'Content-Type: text/plain' \
--data '{
    "commit": "\n```${{ github.event.head_commit.message }}```"
}'
```
