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

<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard13.png" alt="Preview Image" width="90%">
gunakan default password root:kali

dan taip
```bash
# passwd
```
tukar kepada password baru seperti 'toor' atau lain-lain.

ps - apabila password baru ditaip di terminal, ianya tidak akan kelihatan pada screen. bertawakallah, insyaAllah key stroke itu akan berjaya disimpan dalam terminal. root:kali atau kali:kali bermaksud username:password atau login:password

#### Set SSH
sebelum set service sshd jom kita semak IP Address Kali Linux dulu. Sila taip:
```bash
# ip a
```
Cuba lihat pada eth0 (atau kemungkinan nama nic berbeza) jika menggunakan VMWare Player selalunya akan bermula dengan 192.168.X.X. Kenal pasti IP Address ini dan siap sedia download Third party SSH client seperti PUTTY dan MobaXterm.
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard09.png" alt="Preview Image" width="90%">

next command
```bash
# nano /etc/ssh/sshd_config
```
cari dalam file tu 'permit root login', buang comment (uncomment) dan tukar argumen kedua dengan perkataan 'yes'
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard09.png" alt="Preview Image" width="90%">

keluar dan save configuration file seterusnya taip next command
```bash
# systemctl enable ssh
# systemctl start ssh
```
bukan third party dan cuba remote ke IP Address dengan port 22. Masukkan root dan password baru anda.

#### Tmux Tutorial
Jom install extenstion tmux.
```bash
# cd
# git clone https://github.com/tmux-plugins/tpm ~/.tmux/plugins/tpm
# nano ~/.tmux.conf
```
tambahkan ke dalam configuration file tersebut
<pre>
```code
  
# TPM
set -g @plugin 'tmux-plugins/tpm'
set -g @plugin 'tmux-plugins/tmux-resurrect'

# Simpan dengan prefix + Ctrl-s
bind-key C-s run-shell '~/.tmux/plugins/tmux-resurrect/scripts/save.sh'

# Pulihkan dengan prefix + Ctrl-r
bind-key C-r run-shell '~/.tmux/plugins/tmux-resurrect/scripts/restore.sh'

# TPM shortcut
run '~/.tmux/plugins/tpm/tpm'

```
</pre>

ok run satu sesi tmux dulu
```bash
# tmux
```
kemudian CTRL+b SHIFT+I



