# 📌 Nome da Vulnerabilidade

## Injeção (Injection) – OWASP Top 1 (2017)

# 📖 Definição Técnica

- Uma falha de injeção ocorre quando dados fornecidos por usuários, serviços externos ou fontes não confiáveis são enviados para um interpretador como parte de uma consulta ou comando. O atacante insere dados maliciosos que alteram a lógica esperada da aplicação, podendo manipular bancos de dados (SQL/NoSQL), executar comandos no sistema operacional, ou acessar informações sigilosas.

# 🎯 Vetores de Ataque Mais Comuns

- Parâmetros de URL (id=1 OR 1=1)
- Formulários de login sem validação
- Headers HTTP ou cookies manipulados
- Integrações com APIs ou serviços legados

## Queries ORM (Hibernate, JPA) mal construídas

# 🏴 Caso Real Documentado

      Empresa: Heartland Payment Systems (EUA)
      Ano: 2008 – divulgado em 2009
      Vulnerabilidade explorada: SQL Injection

- Impacto:
  - Hackers exploraram falhas de injeção SQL no sistema de pagamento.
  - Foram roulados mais de 130 milhões de números de cartões de crédito e débito.
  - O caso é considerado um dos maiores vazamentos de dados financeiros da história.
  - A empresa sofreu perdas milionárias, incluindo multas, processos judiciais e danos à reputação.
