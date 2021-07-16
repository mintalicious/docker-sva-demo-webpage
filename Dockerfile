FROM php:8-apache

RUN a2enmod rewrite

COPY ./src /app
WORKDIR /app

EXPOSE 8080
ENTRYPOINT ["sh","start.sh"]

CMD ["SVA Demo HTTP Request Metadata"]
