REPO = git@github.com:twitter/hogan.js.git
BUILD := build
VERSION = ${shell node -e 'console.log(JSON.parse(require("fs").readFileSync("package.json").toString()).version);'}

#
# Run command line tests
#
phantom:
	@ echo 'Running phantom.js QUnit tests.'
	@ node test/run.js test/index.html

#
# Run hulk tests
#
hulk:
	@ echo 'Running hulk tests.'
	@ node test/hulk.js

#
# Run Mustache spec tests
#
spec:
	@ echo 'Running spec tests.'
	@ node test/spec.js
	@ node test/specWithGet.js

test: phantom hulk spec
	@ echo "Testing complete.\n"

#
# Run benchmark
#
benchmark:
	@ node benchmark/console/index.js

clean:
	@ rm -rf dist/*

dist:
	@ mkdir dist
	@ node tools/release.js

#
# Make a new version of Hogan from the current dev version.
#
release: clean dist
	@ echo "Creating a new version of Hogan."
	@ mkdir -p web/builds/$(VERSION)
	@ cp dist/*.* web/builds/$(VERSION)/.
#
# Make the gh-pages website
#
# This target builds the hogan.js github website using hogan.js.
#
# cd into build/gh-pages to check in the new site.
#
GH_PAGES = $(BUILD)/gh-pages
web: | pages
	@cp -R web/* $(GH_PAGES)
	@@ node tools/web_templates.js
	@echo
	@echo "Website built in $(GH_PAGES)."

#
# Checkout the gh-pages branch.
#
pages: | $(BUILD)
	@if [ ! -d "$(GH_PAGES)" ]; then \
	git clone -b gh-pages $(REPO) $(GH_PAGES); \
	rm -rf $(GH_PAGES)/*; \
	fi;
	@mkdir -p $(GH_PAGES)/images

$(BUILD):
	mkdir -p $(BUILD)

.PHONY: test spec benchmark web release
