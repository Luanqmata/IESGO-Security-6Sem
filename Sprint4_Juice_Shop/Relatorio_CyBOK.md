# ATIVIDADE PARA CASA – INTEGRAÇÃO AAA EM SISTEMAS DISTRIBUÍDOS

**Disciplina:** Segurança em Informática

**Professor:** PEDRO GRESS

**Aluno:** Luan Brito Sousa Calazans

**6º Semestre, Faculdades IESGO**

---

# Relatório Crítico – Integração AAA em Sistemas Distribuídos

**Disciplina:** Segurança em Informática

**Professor:** Pedro Gress

**Entrega:** 22/SET/2025

**Referência:** CyBOK – Capítulo 13 (Authentication, Authorisation & Accountability)

## Introdução

A migração de serviços críticos para uma arquitetura em nuvem distribuída amplia as possibilidades de escalabilidade e disponibilidade, mas também traz novos riscos de segurança. No caso analisado, foram identificados três problemas principais: conflitos nas políticas de controle de acesso, fragilidades na autenticação de usuários remotos e falhas nos mecanismos de accountability após incidentes. Este relatório discute tais questões de forma crítica, fundamentado nas seções 13.4, 13.5 e 13.6 do CyBOK.

## 1. Controle de Acesso Distribuído (CyBOK 13.4)

Em sistemas distribuídos, cada site pode adotar suas próprias políticas de acesso, o que gera conflitos quando usuários precisam transitar entre ambientes. O CyBOK (13.4) destaca que a coerência das políticas é um dos principais desafios, já que a diversidade de modelos (discricionário, baseado em papéis, baseado em atributos) pode gerar inconsistências. Outro obstáculo é o equilíbrio entre autonomia local e padronização global.

Para harmonizar essas políticas, é necessário definir um modelo unificado de controle de acesso, que funcione como referência comum. Isso pode envolver a adoção de um esquema baseado em atributos (ABAC), que permite flexibilidade e granularidade. Ainda assim, permanecem desafios práticos, como conflitos entre requisitos organizacionais distintos, sobrecarga administrativa e a dificuldade de atualizar políticas de forma consistente em múltiplos locais.

## 2. Autenticação (CyBOK 13.5)

A autenticação em ambientes distribuídos de nuvem é especialmente crítica, pois o acesso remoto expande a superfície de ataque. O CyBOK (13.5) enfatiza que mecanismos simples de senha não são suficientes. Nesse cenário, métodos mais robustos devem ser aplicados.

A adoção de autenticação multifator (MFA), combinando algo que o usuário sabe (senha), algo que possui (token ou app de autenticação) e algo que é (biometria), oferece maior resistência contra ataques de phishing e comprometimento de credenciais. Além disso, protocolos federados permitem que múltiplos sites compartilhem confiança entre si, facilitando o acesso em um sistema distribuído sem sacrificar a segurança.

Tecnicamente, esses mecanismos reduzem a dependência de uma única credencial e permitem centralizar a verificação de identidade, o que ajuda a unificar o processo de autenticação em ambientes multi-site.

## 3. Accountability (CyBOK 13.6)

A accountability garante que ações realizadas em sistemas distribuídos possam ser atribuídas a usuários específicos, com rastreabilidade adequada para auditorias e investigações. O CyBOK (13.6) aponta que isso depende de registros de logs confiáveis, protegidos contra adulteração e integrados entre diferentes sites.

No caso em análise, falhas na utilização de logs comprometeram a investigação de incidentes. Para superar isso, é necessário adotar práticas como:

* Centralização e padronização dos logs.
* Proteção contra alterações com assinaturas digitais ou trilhas de auditoria imutáveis.
* Definição clara de responsabilidades.

Apesar disso, existem limitações práticas: o alto volume de dados em ambientes de nuvem pode gerar sobrecarga de armazenamento, e a análise detalhada dos registros exige ferramentas especializadas e equipes capacitadas.

## 4. Integração Crítica e Trade-offs

Conciliar os três pilares de AAA em um ambiente distribuído exige escolhas estratégicas. O CyBOK (13.4–13.6) deixa claro que há trade-offs inevitáveis:

* Escalabilidade vs. Consistência.
* Usabilidade vs. Robustez.
* Detalhamento vs. Custo.

Uma solução de compromisso envolve a adoção de autenticação federada com MFA, combinada a um modelo unificado de controle de acesso baseado em atributos e a centralização dos logs em um sistema de auditoria seguro. Isso não elimina todos os desafios, mas equilibra segurança, escalabilidade e rastreabilidade de forma prática.

## Conclusão

A análise crítica baseada no CyBOK Capítulo 13 mostra que a integração de controle de acesso distribuído, autenticação robusta e accountability confiável é indispensável em sistemas em nuvem. Embora existam limitações e custos, a harmonização das políticas, o fortalecimento da autenticação e a centralização dos mecanismos de auditoria constituem uma estratégia eficaz para enfrentar os problemas identificados. O compromisso entre escalabilidade, segurança e rastreabilidade é inevitável, mas pode ser alcançado com soluções bem planejadas e fundamentadas nos princípios do CyBOK.

## Referências

CyBOK – The Cyber Security Body of Knowledge. Chapter 13: Authentication, Authorisation & Accountability. Sections 13.4, 13.5, 13.6.
