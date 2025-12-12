# Tentativas e ajustes recentes

- Ajuste de whitelist do Polylang para usar URLs absolutas (tema/dist/uploads) e filtrar itens não-string para evitar reescrita de assets.
- Configuração do `base` do Vite para `/wp-content/themes/almeidacunha-tema/dist/` em build, mantendo `/` em dev.
- Criação de `AC_FastViteCompiler` para desabilitar ping ao dev-server em produção e reduzir timeout para 0.75s ao checar `@vite/client`.
- Substituição do compilador padrão pelo `AC_FastViteCompiler` no bootstrap do TailPress.
