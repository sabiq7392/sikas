class InputLabel {
  constructor() {
    this.inputs = document.querySelectorAll('.auth-input');
    this.labels = document.querySelectorAll('.auth-label');
  }

  render() {
    if (this.inputs && this.labels) {
      this.#onFocus();
      this.#onBlur();
    }
  }

  #onFocus() {
    this.inputs.forEach((input, index) => {
      input.addEventListener('focus', () => this.#addActiveWhenFocus(input, this.labels[index]));
    });
  }

  #onBlur() {
    this.inputs.forEach((input, index) => {
      input.addEventListener('blur', () => this.#addActiveWhenBlur(input, this.labels[index]));
    });
  }

  #addActiveWhenFocus(input, label) {
    input.classList.add('active');
    label.classList.add('active');
  }

  #addActiveWhenBlur(input, label) {
    if (input.value === '') {
      input.classList.remove('active');
      label.classList.remove('active');
    } else {
      label.classList.add('active');
    }
  }
}

const inputLabel = new InputLabel();

export default inputLabel;