

# Usando db_nmap no MF6

```txt
  db_nmap -sV -sS -O -A -p- -v 37.59.174.225
```

<img width="727" height="430" alt="image" src="https://github.com/user-attachments/assets/5aa624c2-217b-4ab2-829b-59d801321886" />

---

<img width="796" height="386" alt="image" src="https://github.com/user-attachments/assets/45232b4c-850c-4462-b071-bab89cc67f1d" />

---

- Scaneando portas UDP 

```txt
  db_nmap -sU -sV --host-timeout 30m --max-retries 2 -p- -v 37.59.174.225
```
