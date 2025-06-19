<?php

class Course {

    public function __construct(
        protected string $title,
        protected string $subtitle,
        protected string $description,
        protected array $tags
    ) {
        // Constructor para inicializar las propiedades del curso
        // No es necesario hacer nada aquí, ya que las propiedades se inicializan automáticamente
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        return null; // O lanzar una excepción si prefieres
    }

    public function __toString() {
        $html = "<h1>{$this->title}</h1>";
        $html .= "<h2>{$this->subtitle}</h2>";
        $html .= "<p>{$this->description}</p>";

        $html .= "<h3>Tags:</h3>";

        $html .= "<ul>";
        foreach ($this->tags as $tag) {
            $html .= "<li>{$tag}</li>";
        }
        $html .= "</ul>";
        return $html;
    }
    
    public function addTag(string $tag): void {
        // Método para agregar una etiqueta al curso
        // Verifica si la etiqueta ya existe, si está vacía o si ya hay
        // 5 etiquetas antes de agregarla
        if (!is_string($tag)) {
            throw new InvalidArgumentException('La etiqueta debe ser una cadena de texto.');
        }
        if (in_array($tag, $this->tags)) {
            // Si la etiqueta ya existe, no la agregamos
            return;
        }

        if (empty($tag)) {
            // Si la etiqueta está vacía, no la agregamos
            return;
        }

        if (count($this->tags) >= 5) {
            return; // Si ya hay 5 etiquetas, no se agregan más
        }
        
        $this->tags[] = $tag;
    }
}