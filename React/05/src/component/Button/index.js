import React from "react";
import PropTypes from "prop-types";
import styled from "styled-components";

const StyledButton = styled.button`
    background-color: ${props => props.backgroundColor};
  filter: ${props => props.inverted ? "invert(100%)" : "none"};
    color: ${props => props.color};
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    &:hover {
        background-color: ${props => props.hoverBackgroundColor};
        color: ${props => props.hoverColor};
    }
`;

const Button = (props) => {
    return (
        <StyledButton className="btn" onClick={props.click} style={props.style} inverted={props.inverted} backgroundColor={props.backgroundColor} color={props.color} hoverBackgroundColor={props.hoverBackgroundColor} hoverColor={props.hoverColor}>
            {props.buttonText}
        </StyledButton>
    );
};

Button.propTypes = {
    buttonText: PropTypes.string,
    click: PropTypes.func,
};

export default Button;