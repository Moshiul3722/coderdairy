
// problem accordion

const accordion = document.getElementsByClassName('accordion_content');

for (let i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click',function(){
        this.classList.toggle('active');
    });

}

// ckeditor
CKEDITOR.replace('description');
