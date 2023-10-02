FROM node:20.8.0-alpine3.18
RUN echo yes | npx nuxi@3.9.0 init myapp
WORKDIR /myapp
RUN npm install
CMD ["npm", "run", "dev", "--", "-o", "-p", "80"]
