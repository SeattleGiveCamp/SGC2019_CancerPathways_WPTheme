// in essay blog category dropdown, hide the categories not affiliated with the essays
if (document.querySelector(".page-id-12232 #ofcategory")) {
  limitCategoryDropdown();
}

// in essay blog tag dropdown, hide the tags not affiliated with the essays
if (document.querySelector(".page-id-12232 #ofpost_tag")) {
  limitTagDropdown();
}

// in the main blog, hide the tag cloud
if (
  document.querySelector(".single-post article.post") &&
  document.querySelector("#categorized-tag-cloud")
) {
  hideTagCloud();
}

// in the essay tag pages, hides unnecessary tags
if (document.querySelector('#categorized-tag-cloud')) {
	hideUnnecessaryTagsInCloud();
}

// ==================================================================

function limitCategoryDropdown() {
  let options = [
    ...document.querySelector(".page-id-12232 #ofcategory").children
  ].splice(1);
  let start = options.findIndex(option => option.value === "29");
  let remaining = options.splice(start + 1);
  let end = remaining.findIndex(option => option.className === "level-0");
  let last = remaining.splice(end);

  options.forEach(option => (option.hidden = true));
  last.forEach(option => (option.hidden = true));
  
  remaining.forEach(option => { 
  	if (option.label.includes('2')) {
   		option.hidden = true;
  	}
  })

}

function limitTagDropdown() {
  let tags = [...document.querySelector(".page-id-12232 #ofpost_tag").children];
  tags.forEach(tag => {
    if (tag.innerText[0] === ".") {
      tag.hidden = true;
    }
  });
}

function hideTagCloud() {
  let isNotEssayPage = ![
    ...document.querySelector(".single-post article.post").classList
  ].includes("category-essays");
  let node = document.querySelector("#categorized-tag-cloud");
  if (isNotEssayPage && node) {
    node.hidden = true;
  }
}

function hideUnnecessaryTagsInCloud() {
	let children = [...document.querySelector('#categorized-tag-cloud').children];
	console.log(children)
	children.forEach(tag => {
		if (tag.innerText[0] === '.') {
			tag.hidden = true;
		}
	})
}
