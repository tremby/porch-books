#!/usr/bin/env bash

echo "Clean dist..."
rm -rf dist

echo "Copy src to dist..."
cp -a src dist

cd dist

echo "Evaluate all non-include non-partial PHP files.."
for file in $(find . -path ./include -prune -o -type f -name "*.php" -\! -name "_*" -print); do
	file="${file#./}"
	echo "$file"
	dn="$(dirname "$file")"
	bn="$(basename "$file")"
	(
		cd "$dn"
		php "$bn" >"${bn%.php}"
	)
	echo "/${file%.php}" >>_headers
	echo "	Content-Type: text/html" >>_headers
done

echo "Delete all PHP files..."
find . -type f -name "*.php" -delete -print

echo "Done"
