const handleUI = (inputElement, errorSelector, errorMessage) => {
    const parentElement = inputElement.parentElement
    const formMessageElement = parentElement.querySelector(errorSelector)

    if (errorMessage) {
        formMessageElement.innerText = errorMessage
        parentElement.classList.add("invalid")
    } else {
        formMessageElement.innerText = ""
        parentElement.classList.remove("invalid")
    }
}

// const handleValidate

const Validator = ({ form, errorSelector, rules }) => {
    let firstSubmit = false

    const selectorRules = {}

    const formElement = document.querySelector(form)

    if (formElement) {
        formElement.addEventListener("submit", (event) => {
            firstSubmit = true
            rules.forEach(({ selector }) => {
                const inputElement = formElement.querySelector(selector)
                let errorMessage
                const inputElementRules = selectorRules[selector]

                for (let i = 0; i < inputElementRules.length; i++) {
                    errorMessage = inputElementRules[i](inputElement.value)

                    if (errorMessage) {
                        event.stopImmediatePropagation()
                        event.preventDefault()
                        handleUI(inputElement, errorSelector, errorMessage)
                        break
                    }
                }
            })
        })

        rules.forEach(({ selector, validate }) => {
            const inputElement = formElement.querySelector(selector)

            if (Array.isArray(selectorRules[selector])) {
                selectorRules[selector].push(validate)
            } else {
                selectorRules[selector] = [validate]
            }

            if (inputElement) {
                inputElement.onblur = () => {
                    if (firstSubmit) {
                        let errorMessage
                        const inputElementRules = selectorRules[selector]
                        for (let i = 0; i < inputElementRules.length; i++) {
                            errorMessage = inputElementRules[i](
                                inputElement.value
                            )
                            if (errorMessage) break
                        }

                        handleUI(inputElement, errorSelector, errorMessage)
                    }
                }
                inputElement.oninput = () => {
                    handleUI(inputElement, errorSelector)
                }
            }
        })
    }
}

// return undefined if pass rule
Validator.isRequired = (selector, message) => {
    return {
        selector,
        validate(value) {
            return value.trim()
                ? undefined
                : message || "Vui lòng nhập trường này"
        },
    }
}

Validator.isEmail = (selector, message) => {
    return {
        selector,
        validate(value) {
            const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            return regex.test(value.trim())
                ? undefined
                : message || "Trường này phải là email"
        },
    }
}

Validator.amountNumber = (selector, number, message) => {
    return {
        selector,
        validate(value) {
            return value.trim().length === number
                ? undefined
                : message || `Trường này phải có ${number} kí tự`
        },
    }
}

Validator.validNumberPhone = (selector, message) => {
    return {
        selector,
        validate(value) {
            const onlyNumberRegex = /^\d{10}$/
            return onlyNumberRegex.test(value.trim())
                ? undefined
                : message || "Số điện thoại không hợp lệ"
        },
    }
}

Validator.startWithNumber = (selector, number, message) => {
    return {
        selector,
        validate(value) {
            return value.trim().startsWith(number)
                ? undefined
                : message || "Số điện thoại không hợp lệ"
        },
    }
}

Validator.minLength = (selector, min = 0, message) => {
    return {
        selector,
        validate(value) {
            return value.trim().length >= min
                ? undefined
                : message || `Trường này phải có ít nhất ${min} kí tự`
        },
    }
}

Validator.atLeastOneUppercaseLetter = (selector, message) => {
    return {
        selector,
        validate(value) {
            const regex = /[A-Z]+/
            return regex.test(value.trim())
                ? undefined
                : message || "Trường này phải có ít nhất 1 ký tự viết hoa"
        },
    }
}
