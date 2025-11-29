com o OSINT ativo descobrimos o IP da palataforma podemos passar um nmap pelo ip

1° ip 
<img width="1034" height="361" alt="image" src="https://github.com/user-attachments/assets/4d5c3fae-2361-4b8a-bebc-729a7dd91265" />


2° ip 54.220.192.176
<img width="1071" height="361" alt="image" src="https://github.com/user-attachments/assets/e7b290f3-c419-4b76-a028-ce35bfdf9ca5" />


3° ip 46.137.15.86
<img width="1014" height="376" alt="image" src="https://github.com/user-attachments/assets/2c23dfbd-d637-4e20-bd47-f2ad2d1eda4a" />

# 🔍 RESULTADO FINAL - SCAN NMAP JUICE SHOP

## 📊 RESUMO CONSOLIDADO

| IP Address | Portas Abertas | Status |
|------------|----------------|---------|
| `54.73.53.134` | 80, 443 | ✅ Ativo |
| `54.220.192.176` | 80, 443 | ✅ Ativo |
| `46.137.15.86` | 80, 443 | ✅ Ativo |

## 🎯 CONCLUSÕES IMPORTANTES

### 1. Padrão Identificado
- **Todos os 3 IPs** têm exatamente as **mesmas portas abertas**
- **80/tcp** (HTTP) e **443/tcp** (HTTPS)
- **65533+ portas filtradas** em cada scan

### 2. Arquitetura Detectada

🌐 Load Balancer/Cloud Distribution
├── IP 1: 54.73.53.134 (EC2 EU-West-1)
├── IP 2: 54.220.192.176 (EC2 EU-West-1)
└── IP 3: 46.137.15.86 (EC2 EU-West-1)


### 3. Por que Múltiplos IPs?
- **Balanceamento de carga** na AWS
- **Alta disponibilidade** 
- **Distribuição geográfica** (todos Europa Oeste)
- **Escalabilidade** do Heroku

## ⚡ ANÁLISE DE SEGURANÇA

### Portas Abertas:
✅ **80/http** - Serviço Web  
✅ **443/https** - Serviço Web Seguro

### Portas Fechadas/Filtradas:
❌ **21/ftp** - Não exposto  
❌ **22/ssh** - Acesso remoto bloqueado  
❌ **3306/mysql** - DB interno  
❌ **5432/postgres** - DB interno  
❌ **8080/alt-http** - Alternativa bloqueada

## 🔧 PRÓXIMOS PASSOS RECOMENDADOS

```bash
# 1. Scan de serviços detalhado nos IPs
nmap -sV -sC 54.73.53.134 54.220.192.176 46.137.15.86

# 2. Teste de vulnerabilidades web
nmap --script http-vuln* -p 80,443 54.73.53.134

# 3. Verificar diferenças entre os nós
nmap -O --min-rate 500 54.73.53.134 54.220.192.176 46.137.15.86
```

## 🎓 APRENDIZADO CHAVE

  Infraestrutura cloud usa múltiplos IPs para o mesmo serviço

  Port filtering é comum em plataformas como Heroku/AWS

  Foco em aplicação web - outras portas deliberadamente bloqueadas

Resultado Final: Todos os IPs são funcionalmente equivalentes - escolha qualquer um para testes web! 🚀
