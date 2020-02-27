<?php

namespace Statamic\Contracts\Structures;

use Illuminate\Support\Collection;
use Statamic\Contracts\Structures\Nav;

interface NavigationRepository
{
    public function all(): Collection;
    public function find($id): ?Nav;
    public function findByHandle($handle): ?Nav;
    public function save(Nav $nav);
    public function make(string $handle = null): Nav;
}
