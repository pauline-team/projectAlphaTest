<?php


class PhpProject
{
    private string $name;

    /** @var array<string,string> */
    private array $files;

    /**
     * @param array<string,string> $files
     */
    public function __construct(string $name, array $files)
    {
        $this->name = $name;
        $this->files = $files;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null if the file doesn't exist, null is returned
     */
    public function getFileContent(string $path): ?string
    {
        return $this->files[$path] ?? null;
    }
}