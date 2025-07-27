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
<pre>
  # passwd
</pre>

tukar kepada password baru seperti 'toor' atau lain-lain.

ps - apabila password baru ditaip di terminal, ianya tidak akan kelihatan pada screen. bertawakallah, insyaAllah key stroke itu akan berjaya disimpan dalam terminal. root:kali atau kali:kali bermaksud username:password atau login:password

#### Set SSH
sebelum set service sshd jom kita semak IP Address Kali Linux dulu. Sila taip:
<pre>
  # ip a
</pre>
Cuba lihat pada eth0 (atau kemungkinan nama nic berbeza) jika menggunakan VMWare Player selalunya akan bermula dengan 192.168.X.X. Kenal pasti IP Address ini dan siap sedia download Third party SSH client seperti PUTTY dan MobaXterm.
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard09.png" alt="Preview Image" width="90%">

next command
<pre>
  # nano /etc/ssh/sshd_config
</pre>

cari dalam file tu 'permit root login', buang comment (uncomment) dan tukar argumen kedua dengan perkataan 'yes'
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard01.png" alt="Preview Image" width="90%">

keluar dan save configuration file seterusnya taip next command
<pre>
  # systemctl enable ssh
  # systemctl start ssh
</pre>

bukan third party dan cuba remote ke IP Address dengan port 22. Masukkan root dan password baru anda.

#### Tmux Tutorial
Jom install extension tmux.
<pre>
  # cd
  # git clone https://github.com/tmux-plugins/tpm ~/.tmux/plugins/tpm
  # nano ~/.tmux.conf
</pre>
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard02.png" alt="Preview Image" width="90%">
tambahkan ke dalam configuration file tersebut

```  
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
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard03.png" alt="Preview Image" width="90%">

Ok cuba run satu sesi tmux dulu
<pre>
  # tmux
</pre>

kemudian CTRL+b SHIFT+I

<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard04.png" alt="Preview Image" width="90%">
tekan ESC apabila plugins selesai installed dalam tmux
untuk keluar CTRL+b d

Check dan kill semua session
<pre>
  # tmux ls
  # tmux kill-server
  # tmux ls
  # tmux new -s putrajaya
</pre>

Di dalam tmux sesi putrajaya tekan CTRL+b CTRL+s.

Kemudian detach CTRL+b d

check semula session
<pre>
  # tmux ls
  # tmux kill-server
  # tmux ls
  # tmux
</pre>
Dalam tmux baru, tmux yang tiada nama sesi atau "session-0" ini cuba tekan CTRL+b :
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard10.png" alt="Preview Image" width="90%">

Seterusnya pada prompt : sila taip 
```
choose-session
```
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard11.png" alt="Preview Image" width="90%">
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard12.png" alt="Preview Image" width="90%">

Dalam tmux baru tekan CTRL+b CTRL+r untuk restore
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard18.png" alt="Preview Image" width="90%">

Check semula session putrajaya dengan CTRL+b :

Seterusnya pada prompt : sila taip semula
```
choose-session
```
<img src="https://raw.githubusercontent.com/kelassir/baru/refs/heads/main/assets/baru-Clipboard20.png" alt="Preview Image" width="90%">

Alhamdulillah session putrajaya berjaya dikembalikan walaupun tmux ls tidak menunjukkan kewujudan sebarang sesi atau server.



