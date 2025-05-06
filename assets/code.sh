#!/bin/bash

print_tree() {
    local directory="$1"
    local prefix="$2"

    # Liste les fichiers et dossiers, y compris les noms avec espaces
    local entries=("$directory"/*)

    for entry in "${entries[@]}"; do
        local name=$(basename "$entry")
        echo "${prefix}├── $name"

        if [ -d "$entry" ]; then
            # Appel récursif avec indentation supplémentaire
            print_tree "$entry" "$prefix│   "
        fi
    done
}

# Si aucun argument : on utilise le dossier courant
start_dir="${1:-.}"

echo "$start_dir"
print_tree "$start_dir" ""

