export default function InputLabel({
    forInput,
    value,
    className = '',
    children,
    ...props
}) {
    return (
        <label
            {...props}
            className={
                `text-base block mb-2` +
                className
            }
        >
            {value ? value : children}
        </label>
    );
}
