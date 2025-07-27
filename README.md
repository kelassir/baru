# Day 4 & 5
## Web App Performance Testing Course
LOKASiDEA, L01-46, Level 1, Menara Shaftsbury Putrajaya, Jalan Alamanda, Presint 1, 62000 Putrajaya, Wilayah Persekutuan Putrajaya

### To do list
1. extract fresh kali-linux-vmware image
1. change root password
1. set ssh
1. tmux tutorial
1. install docker.io
1. install docker-compose
1. install drupal
1. k6 tutorial
1. jmeter tutorial
1. glances tutorial
1. prometheus tutorial

#### Extract Fresh Kali-Linux-VMware Image
Terus guna kalau download vmware image ini : [kali-linux-2025.2-vmware-amd64.7z](https://cdimage.kali.org/kali-2025.2/kali-linux-2025.2-vmware-amd64.7z)

Kena install dulu kalau pakai iso kali ini : [kali-linux-2025.2-installer-amd64.iso](https://cdimage.kali.org/kali-2025.2/kali-linux-2025.2-installer-amd64.iso).

#### Change Root Password
login dulu kali:kali

kemudian buka root terminal emulator

<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard13.png" alt="Preview Image" width="50%">
gunakan default password root:kali

taip
```
# passwd
```
tukar kepada password baru seperti 'toor' atau lain-lain.

ps - apabila password baru ditaip di terminal, ianya tidak akan kelihatan pada screen. bertawakallah, insyaAllah key stroke itu akan berjaya disimpan dalam terminal. root:kali atau kali:kali bermaksud username:password atau login:password

#### Set SSH
sebelum set service sshd jom kita semak IP Address Kali Linux dulu. Sila taip:
```
# ip a
```
Cuba lihat dapat eth0 (atau kemungkinan nama nic berbeza) jika menggunakan VMWare Player selalunya akan bermula dengan 192.168.X.X. Kenal pasti IP Address ini dan siap sedia download Third party SSH client seperti PUTTY dan MobaXterm.


