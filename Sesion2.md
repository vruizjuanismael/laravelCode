# Desarro de aplicaciones distribuidas
## Sesion 2
Crear una migracuion para la tabla categoria
Database First:
Code first:
### Crear migraciones
```bash
    php artisan make:migration create_categorias_table
```

### Ejecutamos la migraicones
```bash
    php artisan migrate
```

### Refrescar las migraicones
```bash
    php artisan migrate:refresh
```

### Crear un modelo
```bash
    php artisan make:model Categoria
```

### Crear un seeder
```bash
    php artisan make:seeder CategoriaSeeder
```