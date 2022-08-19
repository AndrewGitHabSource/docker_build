const vScrollLook = {
    updated: (el, binding) => {
        if (binding.value) {
            document.documentElement.style.overflow = "hidden";
        } else {
            document.documentElement.style.overflow = "auto";
        }
    }
}

export default vScrollLook;
