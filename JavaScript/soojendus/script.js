const headings = document.querySelectorAll('h1, h2, h3');
const paragraphs = document.querySelectorAll('p');

headings.forEach((heading, index) => {
  heading.addEventListener('click', () => {

    paragraphs[index].classList.add('highlight');
  });
});

paragraphs.forEach((paragraph) => {

  paragraph.addEventListener('mouseover', () => {
 
    paragraph.classList.remove('highlight');

  });

});