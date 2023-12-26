FROM      alpine:3.18.3
RUN       apk update && apk add    nodejs=18.18.2-r0   npm=9.6.6-r0  
RUN       echo yes | npx nuxi@3.9.0 init myapp
WORKDIR   /myapp
RUN       npm install
RUN       npm i @vite-pwa/nuxt -D 
RUN       npm install --save-dev @nuxtjs/tailwindcss
CMD ["npm", "run", "dev", "--", "-o", "-p", "80"]
