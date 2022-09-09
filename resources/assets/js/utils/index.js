export async function addScriptToHead(id, src, name, origResolve) {
    return new Promise((resolve) => {
        if (!document.getElementById(id)) {
            let script = document.createElement('script')
            script.setAttribute('src', src)
            script.setAttribute('id', id)
            document.head.appendChild(script)

            script.onload = () => {
                // script has loaded, you can now use it safely
                return resolve()
                // ... do something with the newly loaded script
            }
        } else {
            resolve = (origResolve) ? origResolve : resolve
            if (!window.google) {
                return setTimeout(async () => {
                    return await addScriptToHead(id, src, name, resolve)
                }, 1000)
            } else {
                return resolve('Isset load script')
            }
        }
    });
}


export function listFormat(data) {
    let newData = []
    for (const [key, label] of Object.entries(data)) {
        newData.push({key, label})
    }
    return newData
}


export function hexToRGBA(hex, alpha) {
    var r = parseInt(hex.slice(1, 3), 16),
        g = parseInt(hex.slice(3, 5), 16),
        b = parseInt(hex.slice(5, 7), 16);

    if (alpha) {
        return "rgba(" + r + ", " + g + ", " + b + ", " + alpha + ")";
    } else {
        return "rgb(" + r + ", " + g + ", " + b + ")";
    }
}

export function today() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }

    today = yyyy+'-'+mm+'-'+dd;
    return today
}


export function formatDate(d) {
    return d.getFullYear() + "-" + ("0"+(d.getMonth()+1)).slice(-2) + "-" +  ("0" + d.getDate()).slice(-2);
}


export function validPhone(value) {
    return value.length === 10
}

export function clearPhoneForSend(value) {
    let re = /^\+1\s/;
    return value.replace(re, '');
}

export function validAddressFrom(value, siblings) {
    return siblings.moving_from_state && siblings.moving_from_city && siblings.moving_from_zip && siblings.thoroughfare_from
}

export function validAddressTo(value, siblings) {
    return siblings.moving_to_state && siblings.moving_to_city && siblings.moving_to_zip && siblings.thoroughfare_to
}
